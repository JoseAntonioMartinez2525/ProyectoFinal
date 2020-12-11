<?php if (isset($_SESSION) && isset($_SESSION['error']) ): ?>
		<h3 style="color: red;">
		 Error: <?=  $_SESSION['error'] ?> 
		</h3>
		<?php unset($_SESSION['error']); ?>
	<?php endif ?>

	<?php if (isset($_SESSION) && isset($_SESSION['success']) ): ?>
		<h3 style="color: green;">
		Correcto: <?= $_SESSION['success'] ?> 
		</h3 >
		<?php unset($_SESSION['success']); ?>
	<?php endif ?>	