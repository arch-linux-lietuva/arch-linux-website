		<div id="content">

			<div class="left">
				<div class="content-left">
					<div class="box">
						<h2>Paprasta, lengva distribucija</h2>
						<p>Sveiki atvykę į puslapį, skirtą <strong>Arch Linux</strong> - lengvai ir lankščiai Linux&#0174; distribucijai, kuri stengiasi į viską žiūrėti kuo papraščiau.</p>
						<p>Šiuo metu oficialiai yra siūlomi paketai pritaikyti i686 ir x86-64 architektūroms. </p>
						<p>Mūsų stipri bendruomenė yra įvairi ir padedanti. Jeigu norite labiau susipažinti su Arch Linux - <a href="https://wiki.archlinux.org/index.php/Main_Page_(Lietuvi%C5%A1kai)">peržiūrėkite wiki</a>. Jeigu turite klausimų - aplankykite <a href="http://sls.archlinux.lt/">mūsų forumą</a>.</p>
					</div>
					<div class="posts">
						<h3>Naujienos</h3>
						<?php foreach ( $posts as $post ) : ?>
						<h4><?php echo $post->title ?></h4>
						<p class="timestamp"><?php echo $post->timestamp ?></p>
						<div class="article-content"><?php echo $post->body ?></div>
						<?php endforeach; ?>

					</div>
				</div>
			</div>

			<div class="right">
				<div class="updates widget">
					<h3>Atnaujinimai</h3>
					<table>
						<?php foreach ( $rss as $data ): ?>
							<?php $item = (array) $data; ?>
							<tr>
								<td class="pkg-name"><?php echo anchor($item['link'], $item['title']); ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
				<div class="nav widget">
					<h4>Dokumentacija</h4>
					<ul>
						<li><?php echo anchor("https://wiki.archlinux.org/index.php/Main_Page_(Lietuvi%C5%A1kai)", "Wiki"); ?></li>
						<li><?php echo anchor("https://wiki.archlinux.org/index.php/Beginners'_Guide_(Lietuvi%C5%A1kai)", "Diegimo vadovas"); ?></li>
						<li><?php echo anchor("https://github.com/arch-linux-lietuva/arch-beginners-guide-lt/raw/master/book.pdf", "Atnaujintas diegimo vadovas") ?></li>
					</ul>
					<h4>Bendruomenė</h4>
					<ul>
						<li><?php echo anchor("http://sls.archlinux.lt", "Diskusijos"); ?></li>
						<li><?php echo anchor("http://mail.archlinux.lt", "Elektroninis paštas"); ?></li>
						<li><?php echo anchor("http://map.archlinux.lt", "Vartotojų žemėlapis"); ?></li>
					</ul>
					<h4>Apie</h4>
					<ul>
						<li><?php echo anchor("https://wiki.archlinux.org/index.php/Arch_Linux_(Lietuvi%C5%A1kai)", "Apie Arch Linux"); ?></li>
						<li><?php echo anchor("http://sls.archlinux.lt/viewtopic.php?id=2", "Apie Arch Linux Lietuva"); ?></li>
					</ul>
				</div>
			</div>

		</div>
