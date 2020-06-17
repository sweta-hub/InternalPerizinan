<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Perizinan;
use frontend\models\PerizinanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;

/**
 * PerizinanController implements the CRUD actions for Perizinan model.
 */
class PerizinanController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Perizinan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PerizinanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'perizinan' =>$perizinan,
        ]);
    }

    /**
     * Displays a single Perizinan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Perizinan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Perizinan();
        if ($model->load(Yii::$app->request->post())){
          $model->file = "Initial";
          $model->save();
          $id_perizinan = $model->id_perizinan;
          $file = UploadedFile::getInstance($model, 'file');
          $fileName = $file->baseName . '.' . $file->getExtension();
          $file->saveAs(Yii::getAlias('@frontend') . '/web/File Perizinan/' . $fileName);
          $model->file = $fileName;
          $model->save();

          return $this->redirect(['index', 'id' => $model->id_perizinan]);
      }else{
        return $this->render('create', [
            'model' => $model,
        ]);
    }
}

 //Action Download
 public function actionDownload($id) 
 { 
     $download = Perizinan::findOne($id); 
     $path=Yii::getAlias('@frontend') . '/web/File Perizinan/' . $download->file;
 
     if (file_exists($path)) {
         return Yii::$app->response->sendFile($path);
     }
 }

    /**
     * Updates an existing Perizinan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_perizinan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Perizinan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Perizinan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Perizinan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Perizinan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function actionViewFile($fileName){
        $file = Yii::getAlias('@frontend' . '/web/File Perizinan/' . $fileName);
        return Yii::$app->response->sendFile($file, NULL, ['inline' => TRUE]);
    }
}
