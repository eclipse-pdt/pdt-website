hello world
	              <?
	              include("rss_reader.php"); 
	              $reader = new lastRSS();
	              $messages = $reader->Parse("http://rss.cnn.com/rss/cnn_topstories.rss");
	              $index = 0;

                  while ($index < sizeof($messages["items"]) && $index < 4) {
	                    $message = $messages["items"][$index];
	                    ?>
						<li>
							<span class="normal"><b><?=$message["title"] ?></b></span> -
							<a href="<?=html_entity_decode($message["link"]) ?>">Report</a>
							<a href="javascript:toggle('bugs_<?=$index ?>')">Complete description</a>
							<ul id="bugs_<?=$index ?>" style="display: none">
								<li><?=html_entity_decode($message["description"])?></li>
							</ul>
						</li>
	                    <? $index += 1;
	              }
	              ?>
