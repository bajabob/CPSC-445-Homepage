<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "a2_tags".
 *
 * @property integer $id
 * @property string $tag
 */
class A2Tags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'a2_tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tag' => 'Tag',
        ];
    }

    public static function create($tag){
        $tagCreate = new A2Tags();
        $tagCreate->tag = $tag;
        $tagCreate->save();
    }

    public static function getAllJoin(){
        $rows = Yii::$app->db->createCommand (
            "SELECT *
                FROM a2_people AS p
                INNER JOIN a2_people_tags AS pt
                    ON p.id = pt.people_id
                INNER JOIN a2_tags AS t
                    ON pt.tag_id = t.id"
        )->queryAll();
        return $rows;
    }
}
