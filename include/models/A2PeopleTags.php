<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "a2_people_tags".
 *
 * @property integer $people_id
 * @property integer $tag_id
 */
class A2PeopleTags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'a2_people_tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['people_id', 'tag_id'], 'required'],
            [['people_id', 'tag_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'people_id' => 'People ID',
            'tag_id' => 'Tag ID',
        ];
    }

    public static function create($personId, $tagId){
        $tagCreate = new A2PeopleTags();
        $tagCreate->people_id = $personId;
        $tagCreate->tag_id = $tagId;
        $tagCreate->save();
    }


    public static function getAllByPeopleId($id){
        $rows = Yii::$app->db->createCommand (
            "SELECT *
                FROM a2_people_tags AS pt
                INNER JOIN a2_tags AS t
                    ON pt.tag_id = t.id
                WHERE pt.people_id = :id"
        )->bindParam(':id', $id)
            ->queryAll();
        return $rows;
    }

}
