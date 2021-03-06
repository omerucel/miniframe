<?php

namespace MiniFrame\Di;

interface DiService
{
    /**
     * @param Di $diImpl
     * @return mixed
     */
    public function getService(Di $diImpl);

    /**
     * @return bool
     */
    public function isShared();
}
