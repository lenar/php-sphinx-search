<?php

namespace NilPortugues\Sphinx\Facet\Interfaces;

/**
 * Interface for data cache for facet values.
 */
interface CacheInterface
{
    /**
     * Retrieve data by key.
     *
     * @param  string $key Key identifier.
     * @return mixed  Retrieved data.
     */
    public function get($key);

    /**
     * Store data by key.
     *
     * @param  string  $key       Key identifier.
     * @param  string  $data      Data to store.
     * @param  boolean $overwrite Whether to replace data if the key already exists.
     * @param  boolean $sticky    Whether to make the key "sticky".
     * @return boolean TRUE if successful, FALSE otherwise.
     */
    public function set($key, $data, $overwrite = false, $sticky = false);

    /**
     * Delete stored data. "Sticky" keys will not be cleared by default.
     *
     * @param  string  $prefix       Keys with this prefix will be deleted.
     * @param  boolean $clear_sticky Whether to clear "sticky" values as well.
     * @return boolean TRUE if successful, FALSE otherwise.
     */
    public function delete($prefix, $clear_sticky = false);
}
