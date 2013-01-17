<?php

Yii::import('application.models._base.BaseVirtualDomains');

class VirtualDomains extends BaseVirtualDomains
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
public static function label($n = 1)
    {
        return Yii::t('app', 'Domain|Domains', $n);
    }

}
