<?php

namespace app\models;

use yii\db\ActiveRecord;
/**
 * This is the model class for table "field".
 *
 * @property integer $id
 * @property string $fi_name
 * @property string $fi_val
 * @property string $fi_type
 * @property string $fi_option_one
 * @property string $fi_option_two
 * @property integer $is_need
 * @property string $fi_rule
 * @property integer $fi_l_start
 * @property integer $fi_l_end
 */
class Field extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'field';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fi_name', 'fi_type', 'fi_option_one', 'fi_option_two', 'fi_rule'], 'string', 'max' => 30],
            [['fi_val'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fi_name' => 'Fi Name',
            'fi_val' => 'Fi Val',
            'fi_type' => 'Fi Type',
            'fi_option_one' => 'Fi Option One',
            'fi_option_two' => 'Fi Option Two',
            'is_need' => 'Is Need',
            'fi_rule' => 'Fi Rule',
            'fi_l_start' => 'Fi L Start',
            'fi_l_end' => 'Fi L End',
        ];
    }
}
