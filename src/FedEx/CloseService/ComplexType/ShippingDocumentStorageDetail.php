<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies how to store shipping documents.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ShippingDocumentStorageDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingDocumentStorageDetail';

    /**
     * Provides the path to be used for STORED or DEFERRED documents.
     *
     * @param string $filePath
     * return ShippingDocumentStorageDetail
     */
    public function setFilePath($filePath)
    {
        $this->FilePath = $filePath;
        return $this;
    }
    
    /**
     * Identifies the convention by which file names are constructed for STORED or DEFERRED documents.
     *
     * @param \FedEx\CloseService\SimpleType\ShippingDocumentNamingType|string $fileNaming
     * return ShippingDocumentStorageDetail
     */
    public function setFileNaming($fileNaming)
    {
        $this->FileNaming = $fileNaming;
        return $this;
    }
    
    /**
     * Suffix to be placed at the end of the file name; required on some platforms to determine file type.
     *
     * @param string $fileSuffix
     * return ShippingDocumentStorageDetail
     */
    public function setFileSuffix($fileSuffix)
    {
        $this->FileSuffix = $fileSuffix;
        return $this;
    }
    

    
}