<?php 
namespace frontend\components;

use frontend\models\Ad;
use frontend\models\Equipment;
use frontend\models\Cars;
use frontend\models\Models;
use frontend\models\Images;

class Functions
{
	public function getModelId($ad_id)
	{
		$model = Ad::findOne($ad_id)->model;
		return Models::findOne($model)->id;
	}
	public function getCarName($ad_id)
	{
		$car = Ad::findOne($ad_id)->car;
		return Cars::findOne($car)->car;
	}
	public function getModelName($ad_id)
	{
		$model = Ad::findOne($ad_id)->model;
		return Models::findOne($model)->model;
	}
	public function getCar($ad_id)
	{
		$model = Ad::findOne($ad_id)->model;
		return Models::findOne($model)->car;
	}
	public function getEqName($id)
	{
		return Equipment::findOne($id)->name;
	}
	public function getImage($ad_id)
	{
		return Images::find()->where(['ad' => $ad_id])->one()->name;
	}
	public function getEq($eq)
	{
		$equips = explode(',', $eq);
		return Equipment::find()->where(['id' => $equips])->all();
	}
}


?>