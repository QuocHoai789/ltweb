<ul>
<?php foreach ($sanpham as  $value): ?>
	<li>Ten san pham: <?php
 echo $value['TenSp'];
	?></li>
	<li>Gia tien:<?php echo $value['GiaTien'];  ?></li>
	<li>Thong tin:<?php echo $value['ThongTin'];  ?></li>
<?php endforeach ?>
</ul>