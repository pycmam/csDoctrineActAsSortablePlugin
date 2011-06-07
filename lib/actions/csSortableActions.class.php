<?php

class csSortableActions extends sfActions
{
    /**
     * Редирект на index модуля
     */
    protected function redirectToIndex()
    {
        $this->redirect(sprintf('%s/index', $this->moduleName));
    }

    /**
     * Переместить выше
     */
    public function executePromote()
    {
        $object = $this->getRoute()->getObject();
        $object->promote();
        $object->save();
        $this->redirectToIndex();
    }

    /**
     * Переместить ниже
     */
    public function executeDemote()
    {
        $object = $this->getRoute()->getObject();
        $object->demote();
        $object->save();
        $this->redirectToIndex();
    }

    /**
     * Поднять наверх списка
     */
    public function executeMoteToFirst()
    {
        $object = $this->getRoute()->getObject();
        $object->moveToFirst();
        $object->save();
        $this->redirectToIndex();
    }

    /**
     * Опустить вниз
     */
    public function executeMoteToLast()
    {
        $object = $this->getRoute()->getObject();
        $object->moveToLast();
        $object->save();
        $this->redirectToIndex();
    }
}