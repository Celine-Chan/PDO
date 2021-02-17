<?php

class Shows extends DataBase
{
    /**
     * @return array
     */
    //ex 6
    public function showShows()
    {
        $query = 'SELECT `id`, `title`, `performer`, DATE_FORMAT(`date`, \'%d/%m/%Y\') as `date`, `startTime` FROM `shows` ORDER BY `title`';
        $queryObject = $this->dataBase->query($query);
        $result = $queryObject->fetchAll();
        return $result;
    }
}
