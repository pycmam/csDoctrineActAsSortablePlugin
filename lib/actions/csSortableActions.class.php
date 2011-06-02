<?php

class csSortableActions extends sfActions
{
    /**
     * Редирект на index модуля
     */
    protected function redirectToIndex()
    {
        $this->redirect(sprintf('%s/%s', $this->moduleName, $this->actionName));
    }

    /**
     * Переместить выше
     */
    public function executePromote()
    {
        $object = $this->getRoute()->getObject();
        $object->promote();
        $this->redirectToIndex();
    }

    /**
     * Переместить ниже
     */
    public function executeDemote()
    {
        $object = $this->getRoute()->getObject();
        $object->demote();
        $this->redirectToIndex();
    }

    /**
     * Поднять наверх списка
     */
    public function executeMoteToFirst()
    {
        $object = $this->getRoute()->getObject();
        $object->moveToFirst();
        $this->redirectToIndex();
    }

    /**
     * Опустить вниз
     */
    public function executeMoteToLast()
    {
        $object = $this->getRoute()->getObject();
        $object->moveToLast();
        $this->redirectToIndex();
    }
}