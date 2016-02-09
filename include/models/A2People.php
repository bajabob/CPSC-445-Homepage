<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "a2_people".
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 */
class A2People extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'a2_people';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 100],
            [['url'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
        ];
    }

    public static function create($name, $url){
        $person = new A2People();
        $person->name = $name;
        $person->url = $url;
        $person->save();
    }

}
