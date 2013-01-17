<?php

class UsersController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'VirtualUsers'),
		));
	}

	public function actionCreate() {
		$model = new VirtualUsers;


		if (isset($_POST['VirtualUsers'])) {
			$model->setAttributes($_POST['VirtualUsers']);
			$model->password = md5($model->password);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'VirtualUsers');
		$password = $model->password;

		if (isset($_POST['VirtualUsers'])) {
			$model->setAttributes($_POST['VirtualUsers']);

			if($password != $model->password)
				$model->password = md5($model->password);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'VirtualUsers')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('VirtualUsers');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new VirtualUsers('search');
		$model->unsetAttributes();

		if (isset($_GET['VirtualUsers']))
			$model->setAttributes($_GET['VirtualUsers']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}
