<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $usua_codigo
 * @property string $usua_nome
 * @property string $usua_email
 * @property string $usua_senha
 * @property integer $usua_tipo
 * @property string $usua_auth_key
 *
 * @property Pedido[] $pedidos
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usua_nome', 'usua_email', 'usua_senha', 'usua_tipo', 'usua_auth_key'], 'required'],
            [['usua_tipo'], 'integer'],
            [['usua_nome'], 'string', 'max' => 120],
            [['usua_email'], 'string', 'max' => 100],
            [['usua_senha'], 'string', 'max' => 60],
            [['usua_auth_key'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usua_codigo' => 'Usua Codigo',
            'usua_nome' => 'Usua Nome',
            'usua_email' => 'Usua Email',
            'usua_senha' => 'Usua Senha',
            'usua_tipo' => 'Usua Tipo',
            'usua_auth_key' => 'Usua Auth Key',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedido::className(), ['usua_codigo' => 'usua_codigo']);
    }
}
