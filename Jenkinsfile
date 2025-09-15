pipeline {

  agent {
    kubernetes {
      label 'hugo-agent'
      yaml """
apiVersion: v1
metadata:
  labels:
    run: hugo
  name: hugo-pod
spec:
  containers:
    - name: jnlp
      volumeMounts:
      - mountPath: /home/jenkins/.ssh
        name: volume-known-hosts
      env:
      - name: "HOME"
        value: "/home/jenkins"
    - name: hugo
      image: eclipsefdn/hugo-node:h0.144.2-n22.14.0
      command:
      - cat
      tty: true
  volumes:
  - configMap:
      name: known-hosts
    name: volume-known-hosts
"""
    }
  }

  environment {
    PROJECT_NAME = "pdt" // must be all lowercase.
    PROJECT_BOT_NAME = "PDT Bot" // Capitalize the name
    PROJECT_GH_ORG = "eclipse-pdt" // e.g. eclipse-hono
    PROJECT_WEBSITE_REPO = "pdt-website" // e.g. hono-website
  }

  triggers { pollSCM('H/10 * * * *')

 }

  options {
    buildDiscarder(logRotator(numToKeepStr: '5'))
    timeout(time: 60, unit: 'MINUTES')
  }

  stages {
    stage('Checkout www repo') {
      steps {
        dir('www') {
            git branch: 'deploy', changelog: false, poll: false, credentialsId: 'github-bot-ssh', url: "git@github.com:${PROJECT_GH_ORG}/${PROJECT_WEBSITE_REPO}.git"
        }
        dir('hugo') {
            git branch: 'master', credentialsId: 'github-bot-ssh', url: "git@github.com:${PROJECT_GH_ORG}/${PROJECT_WEBSITE_REPO}.git"
        }
      }
    }
    stage('Build website (master) with Hugo') {
      steps {
        container('hugo') {
            dir('hugo') {
                sh 'hugo --minify -b https://eclipse.dev/${PROJECT_NAME}/'
            }
        }
      }
    }
    stage('Push to deploy branch') {
      steps {
        sh 'rm -rf www/* && cp -Rvf hugo/public/* www/'
        dir('www') {
            sshagent(['github-bot-ssh']) {
                sh '''
                git add -A
                if ! git diff --cached --exit-code; then
                  echo "Changes have been detected, publishing to repo '${PROJECT_GH_ORG}/${PROJECT_WEBSITE_REPO}'"
                  git config user.email "${PROJECT_NAME}-bot@eclipse.org"
                  git config user.name "${PROJECT_BOT_NAME}"
                  git commit -m "Website build ${JOB_NAME}-${BUILD_NUMBER}"
                  git log --graph --abbrev-commit --date=relative -n 5
                  git push origin HEAD:deploy
                else
                  echo "No changes have been detected since last build, nothing to publish"
                fi
                '''
            }
        }
      }
    }
  }
}
