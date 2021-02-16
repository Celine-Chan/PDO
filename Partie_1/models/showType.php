<?php

class ShowTypes extends DataBase
{
    /**
     * @return array
     */
    public function getShowTypes()
    {
        $query = 'SELECT `id`, `type` FROM `showtypes`';
        $queryShowType = $this->dataBase->query($query);
        $resultShowType = $queryShowType->fetchAll();

        return $resultShowType;
    }
}
