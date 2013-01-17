<?php

/**
 * This is the model base class for the table "virtual_users".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "VirtualUsers".
 *
 * Columns in table "virtual_users" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property integer $domain_id
 * @property string $password
 * @property string $email
 *
 */
abstract class BaseVirtualUsers extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'virtual_users';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'VirtualUsers|VirtualUsers', $n);
	}

	public static function representingColumn() {
		return 'password';
	}

	public function rules() {
		return array(
			array('domain_id, password, email', 'required'),
			array('domain_id', 'numerical', 'integerOnly'=>true),
			array('password', 'length', 'max'=>32),
			array('email', 'length', 'max'=>100),
			array('id, domain_id, password, email', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'domain_id' => Yii::t('app', 'Domain'),
			'password' => Yii::t('app', 'Password'),
			'email' => Yii::t('app', 'Email'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('domain_id', $this->domain_id);
		$criteria->compare('password', $this->password, true);
		$criteria->compare('email', $this->email, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}