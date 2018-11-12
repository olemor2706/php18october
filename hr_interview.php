<?php
include "common.php";
// загружаем данные о соискателе из БД

$seeker = new JobSeeker;
$seeker->LoadFormDb($id);

// проверяем, что он в корректном статусе
if($seeker->canBeApproved()){?>
	<form action="approve.php" method = "POST">
		<input type="hidden" name="id" value=" <?php echo $id ?>">
		<input type="submit" value = "Утвердить">
	</form>
	<form action="reject.php" method = "POST">
		<input type="hidden" name="id" value=" <?php echo $id ?>">
		<input type="submit" value = "Отклонить">
	</form>
<?php}else{
	echo "Сотрудник" . $seeker->getLastName() . " не может быть утвержден";
}
?>