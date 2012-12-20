        <nav id="toc" class="toc">
            <h1>Table of Contents</h1>
            <ul>
<?php foreach ($chapters as $chapter_id => $chapter): ?>
                <li>
                    <a href="<?php echo Uri::create('chapter/'.$chapter_id); ?>"><?php echo $chapter['title']; ?></a>
<?php if ($chapter['sections']): ?>
					<ul>
<?php endif; ?>
<?php foreach ($chapter['sections'] as $section_id => $section): ?>
						<li><a href="<?php echo Uri::create('chapter/'.$chapter_id.'#'.$section_id); ?>"><?php echo $section['title']; ?></a></li>
<?php endforeach; ?>
<?php if ($chapter['sections']): ?>
					</ul>
<?php endif; ?>
                </li>
<?php endforeach; ?>
            </ul>
        </nav>
