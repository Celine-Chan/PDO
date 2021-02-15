<?php

class ShowTypes extends DataBase
{
    /**
     * @return 
     */
    public function getShowTypes()
    {
        $query = 'SELECT `id`, `type` FROM `showtypes`';
        $queryShowType = $this->dataBase->query($query);
        $resultShowType = $queryShowType->fetchAll();

        return $resultShowType;
    }
}
