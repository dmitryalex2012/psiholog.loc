<?php

namespace app\modules\admin\models;



use yii\db\ActiveRecord;

/**
 * This is the model class for table "colleagues".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $photo
 * @property string|null $specialization
 * @property string $degree
 * @property string|null $listMethods
 * @property string $descriptionMethods
 * @property string|null $education
 * @property string|null $hobbies
 * @property string $titleAdditional
 * @property string $descriptionAdditional
 * @property string $certificates
 * @property string|null $notes
 */
class Colleagues extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'colleagues';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['degree', 'descriptionMethods', 'titleAdditional', 'descriptionAdditional', 'certificates'], 'required'],
            [['education'], 'string'],
            [['name', 'photo', 'specialization', 'degree', 'hobbies', 'notes'], 'string', 'max' => 255],
            [['listMethods', 'titleAdditional'], 'string', 'max' => 1000],
            [['descriptionMethods', 'descriptionAdditional'], 'string', 'max' => 8000],
            [['certificates'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'photo' => 'Photo',
            'specialization' => 'Specialization',
            'degree' => 'Degree',
            'listMethods' => 'List Methods',
            'descriptionMethods' => 'Description Methods',
            'education' => 'Education',
            'hobbies' => 'Hobbies',
            'titleAdditional' => 'Title Additional',
            'descriptionAdditional' => 'Description Additional',
            'certificates' => 'Certificates',
            'notes' => 'Notes',
        ];
    }
}
