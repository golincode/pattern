        <article id="document" class="document">
        	<section class="chapter">
            	<h1><?php echo $title; ?></h1>
<?php echo $body; ?>
<?php $s = 1; foreach ($sections as $section_id => $section): ?>
	            <section id="<?php echo $section_id; ?>">
	                <h1><?php echo $s.'. '.$section['title']; ?> <a href="#<?php echo $section_id; ?>">§</a></h1>
	                <?php echo $section['body']; ?>
	            </section>
<?php $s++; endforeach; ?>
			</section>
            <aside class="quote">
                <p><span class="copy">“<?php echo $quote['quote']; ?>”</span><br />– <?php echo $quote['author']; ?></p>
            </aside>
        </article>
