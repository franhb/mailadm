<?php

class DomainsController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'VirtualDomains'),
		));
	}

	public function actionCreate() {
		$model = new VirtualDomains;


		if (isset($_POST['VirtualDomains'])) {
			$model->setAttributes($_POST['VirtualDomains']);

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
		$model = $this->loadModel($id, 'VirtualDomains');


		if (isset($_POST['VirtualDomains'])) {
			$model->setAttributes($_POST['VirtualDomains']);

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
			$this->loadModel($id, 'VirtualDomains')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('VirtualDomains');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new VirtualDomains('search');
		$model->unsetAttributes();

		if (isset($_GET['VirtualDomains']))
			$model->setAttributes($_GET['VirtualDomains']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}