
	<?php $this->extend('battle/hunt.layout') ?>

	<?php if ($this->output->union): ?>
		<div style="margin:15px">
			<h4>UnionMonster</h4>
		</div>
		<?php if ($this->output->result !== true): ?>
			<div style="margin:0 20px">
				Time left to next battle : <span class="bold">
				<?php e($this->output->left_minute . ":" . sprintf("%02d", $this->output->left_second)) ?>
				</span>
			</div>
		<?php endif; ?>
		<?php e($this->output->union_showchar) ?>
	<?php else: ?>

	<?php endif; ?>

	<div style="margin:0 15px">
		<h4>Union Battle Log <a href="<?php e(HOF::url('log', null, array('log' => 'ulog'))) ?>">全表示</a></h4>
		<div style="margin:0 20px">
			<?php foreach ($this->output->logs as $log): ?>
			[ <a href="<?php e(HOF::url('log', 'log', array('log' => 'ulog', 'no' => $log['time']))) ?>">
			<?php e($log['date']) ?>
			</a> ]

			<!-- 総ターン数 -->
			<span class="bold">
			<?php e($log['act']) ?>
			</span>turns
			<?php if ($log['win'] === "0"): ?>
			<span class="recover">
			<?php e($log['team'][0]) ?>
			</span>
			<?php elseif ($log['win'] === "1"): ?>
			<span class="dmg">
			<?php e($log['team'][0]) ?>
			</span>
			<?php else: ?>
			<?php e($log['team'][0]) ?>
			<?php endif; ?>
			(
			<?php e($log['number'][0]) ?>
			:
			<?php e($log['avelv'][0]) ?>
			)
			vs
			<?php if ($log['win'] === "0"): ?>
			<span class="dmg">
			<?php e($log['team'][1]) ?>
			</span>
			<?php elseif ($log['win'] === "1"): ?>
			<span class="recover">
			<?php e($log['team'][1]) ?>
			</span>
			<?php else: ?>
			<?php e($log['team'][1]) ?>
			<?php endif; ?>
			(
			<?php e($log['number'][1]) ?>
			:
			<?php e($log['avelv'][1]) ?>
			)
			<br />
			<?php endforeach; ?>
		</div>
	</div>