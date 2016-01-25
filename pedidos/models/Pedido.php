<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedido".
 *
 * @property integer $pedi_codigo
 * @property string $pedi_data_criacao
 * @property string $pedi_data_alteracao
 * @property integer $clien_codigo
 * @property integer $usua_codigo
 * @property integer $fopa_codigo
 *
 * @property Cliente $clienCodigo
 * @property FormaPagamento $fopaCodigo
 * @property Usuario $usuaCodigo
 * @property PedidoProduto[] $pedidoProdutos
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pedido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pedi_data_criacao', 'pedi_data_alteracao', 'clien_codigo', 'usua_codigo', 'fopa_codigo'], 'required'],
            [['pedi_data_criacao', 'pedi_data_alteracao'], 'safe'],
            [['clien_codigo', 'usua_codigo', 'fopa_codigo'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pedi_codigo' => 'Pedi Codigo',
            'pedi_data_criacao' => 'Pedi Data Criacao',
            'pedi_data_alteracao' => 'Pedi Data Alteracao',
            'clien_codigo' => 'Clien Codigo',
            'usua_codigo' => 'Usua Codigo',
            'fopa_codigo' => 'Fopa Codigo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClienCodigo()
    {
        return $this->hasOne(Cliente::className(), ['clien_codigo' => 'clien_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFopaCodigo()
    {
        return $this->hasOne(FormaPagamento::className(), ['fopa_codigo' => 'fopa_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuaCodigo()
    {
        return $this->hasOne(Usuario::className(), ['usua_codigo' => 'usua_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidoProdutos()
    {
        return $this->hasMany(PedidoProduto::className(), ['pedi_codigo' => 'pedi_codigo']);
    }
}
