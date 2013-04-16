<div class="ffun_main ffun_margin_center">
	<div class="ffun_stage ffun_margin_center">
		<div class="ffun_player_container ffun_margin_center">
			<div class="ffun_pp">
				<div class="ffun_float_l"><?=img(asset_url().'img/character-picture.png')?></div>
				<div class="ffun_name_level ffun_name ffun_float_l">
					<span style="font-size:10px">Player</span>
				</div>
				<div class="ffun_name_level">
					<div class="ffun_w_lvl ffun_float_l">
						<span style="font-size:10px">Lv 999</span>
					</div>
					<div class="ffun_float_r">
						<?php
							$level_bar = array(
									'src' => asset_url().'img/level-progress-bar.png',
									'width' => '40px',
									'height' => '12px'
								);
						?>
						<?=img($level_bar)?>
					</div>
				</div>
			</div>
			<div class="ffun_right_container">
				<div class="ffun_player_stat ffun_float_l">
					<div class="ffun_float_l">
						<?=img(asset_url().'img/stats-energy-icon.png')?>
							<span style="font-size:10px">&nbsp;energy</span>
							<?=img(asset_url().'img/plus-icon.png')?>
						<?=br()?>
						<?=img(asset_url().'img/stats-gold-icon.png')?>
							<span style="font-size:10px">&nbsp;gold</span>
							&nbsp;
							<?=img(asset_url().'img/plus2-icon.png')?>
						<?=br()?>
						<?=img(asset_url().'img/stats-luck-icon.png')?>
							<span style="font-size:10px">&nbsp;luck</span>
						<?=br()?>
					</div>
					<div class="ffun_water">
						<div style="height:55px" class="ffun_float_l">
							<!-- <div style="margin-top:53px"> -->
								<!-- <?=img(asset_url().'img/water-bar.png')?> -->
								<img src="<?=asset_url()?>img/water-bar.png" width="15px" height="100%"/>
							<!-- </div> -->
						</div>
						<div class="ffun_w_wtr ffun_float_l"></div>
					</div>
				</div>
				<div class="ffun_lemari_kulkas">
					<?=img(asset_url().'img/storage-kulkas.png')?>					
				</div>
				<div class="ffun_lemari_kulkas">
					<?=img(asset_url().'img/storage-lemari.png')?>					
				</div>
			</div>
		</div>
		<div class="ffun_bar_full ffun_margin_center">
			<div class="ffun_bar">NOTIFICATION<br /></div>
			<div class="ffun_bar_body">
				bodybodybodybody<br />
				bodybodybodybody<br />
				bodybodybodybody<br />
				bodybodybodybody<br />
				bodybodybodybody
			</div>
		</div>
		<div class="ffun_bar_full ffun_margin_center">
			<div class="ffun_bar">ACTIVITY LOG</div>
			<div class="ffun_bar_body">
				bodybodybodybody<br />
				bodybodybodybody<br />
				bodybodybodybody<br />
				bodybodybodybody<br />
				bodybodybodybody
			</div>
		</div>
		<div class="ffun_bar_full ffun_margin_center">
			<div class="ffun_bar">FRIENDS LIST</div>
			<div class="ffun_bar_body">
				bodybodybodybody<br />
				bodybodybodybody<br />
				bodybodybodybc:ody<br />
				bodybodybodybody<br />
				bodybodybodybody
			</div>
		</div>
	</div>
</div>