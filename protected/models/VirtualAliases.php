<?php

Yii::import('application.models._base.BaseVirtualAliases');

class VirtualAliases extends BaseVirtualAliases
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
public function relations()
        {
                return array(
                        'domain' => array(self::BELONGS_TO, 'VirtualDomains', 'domain_id'),
                );
        }
public static function label($n = 1)
    {
        return Yii::t('app', 'Alias|Aliases', $n);
    }
 
}
