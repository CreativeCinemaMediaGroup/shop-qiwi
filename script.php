<?
if(isset($_POST['code']))
	{
	//$response='{"response":[{"uid":133579524,"first_name":"Angel","last_name":"}{}{}{}{}{}{}{}{}{","deactivated":"banned","domain":"id133579524","sex":2,"photo_50":"https:\/\/vk.com\/images\/deactivated_50.png","user_id":133579524},{"uid":159359145,"first_name":"Bi","last_name":"Dnepr","deactivated":"deleted","domain":"id159359145","sex":2,"photo_50":"https:\/\/vk.com\/images\/deactivated_50.png","user_id":159359145},{"uid":56109707,"first_name":"Александр","last_name":"Балабанов","deactivated":"deleted","domain":"id56109707","sex":2,"photo_50":"https:\/\/vk.com\/images\/deactivated_50.png","user_id":56109707},{"uid":8204101,"first_name":"Александр","last_name":"Федоров","sex":2,"domain":"id8204101","bdate":"10.1","city":72,"country":1,"photo_50":"https:\/\/pp.userapi.com\/c604524\/v604524101\/1a460\/I4zsJD95_OA.jpg","hidden":1,"user_id":8204101},{"uid":12762398,"first_name":"Анна","last_name":"Матлахова","sex":1,"domain":"id12762398","bdate":"7.1.1992","city":72,"country":1,"photo_50":"https:\/\/pp.userapi.com\/c627517\/v627517398\/c3d1\/y5efbMusiPo.jpg","user_id":12762398},{"uid":190921334,"first_name":"Аслан","last_name":"Асланов","deactivated":"banned","domain":"id190921334","sex":2,"photo_50":"https:\/\/vk.com\/images\/deactivated_50.png","user_id":190921334},{"uid":35246624,"first_name":"Борис","last_name":"Долгополов","sex":2,"domain":"dolgopolov_18","bdate":"18.2.1988","city":1,"country":1,"photo_50":"https:\/\/pp.userapi.com\/c841637\/v841637327\/9c56\/50w149YM8pg.jpg","user_id":35246624},{"uid":168852497,"first_name":"Брюнетка","last_name":"Наташка","sex":1,"domain":"id168852497","bdate":"19.3","city":30,"country":1,"photo_50":"https:\/\/pp.userapi.com\/c306213\/v306213497\/3900\/fjMp9m6Anrc.jpg","user_id":168852497},{"uid":195684968,"first_name":"Вадик","last_name":"Град","deactivated":"deleted","domain":"id195684968","sex":2,"photo_50":"https:\/\/vk.com\/images\/deactivated_50.png","user_id":195684968},{"uid":193951475,"first_name":"Владимир","last_name":"Иззотов","sex":2,"domain":"id193951475","city":123,"country":1,"photo_50":"https:\/\/pp.userapi.com\/c626317\/v626317475\/37a95\/acgjAfy95Zc.jpg","user_id":193951475}]}';
	$response=Request($url, $post);
	$data=json_decode($response);
	foreach($data->response as $v)
		{
		if($v->uid==$_POST['code']) $user=$v;
		}

	if($user)
		{
		$sql=$db->Query("SELECT * FROM table WHERE active=0 LIMIT 1");
		if($sql)
			{
			$sql=$db->query("UPDATE table SET active=1 WHERE code='".$sql->code."'");
			echo $sql->code;
			}
		}

	}

foreach($data->response as $v)
	{
		if($v->uid=='12762398')
			{
			if($v->sex==1) echo 'успех';
			else echo 'неуспех';
			//print_r($v);
			}
	}

function Request($url, $post)
	{
	$ch=curl_init();
	$result=curl_exec();
	return $result;
	}
?>
