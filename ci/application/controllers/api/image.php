<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

/*//Image routs

$route['api/image/id/(:num)/get'] = 'api/image/setImage/$1';
$route['api/image/get'] = 'api/image/getAllImages';

//Image routs*/

class Image extends REST_Controller
{

    const IMGSIZE = 110;
    const IMG_HEIGHT_LIMIT = 100;
    private $image_path;

    public function __construct()
    {
        parent::__construct();
    }

    public static function getPath($id)
    {
        return 'api/image/id/' . $id . '/get';
    }

    public function setImage_get($id)
    {
        switch ($this->input->get('size')) {
            case 'large':
                if (file_exists($this->getImagesPath($id, 'home')))
                    return $this->output->set_content_type('jpeg')->set_output(file_get_contents($this->getImagesPath($id, $this->input->get('size'))));
                return $this->response(array($this->router->class => array('message' => 'no image')), 404);
                break;

            case 'small':
                if (file_exists($this->getImagesPath($id, 'home')))
                    return $this->output->set_content_type('jpeg')->set_output(file_get_contents($this->getImagesPath($id, $this->input->get('size'))));
                return $this->response(array($this->router->class => array('message' => 'no image')), 404);
                break;

            case 'medium':
                return $this->output->set_content_type('jpeg')->set_output(file_get_contents($this->getImagesPath($id, $this->input->get('size'))));
                return $this->response(array($this->router->class => array('message' => 'no image')), 404);
                break;

            case 'home':
                if (file_exists($this->getImagesPath($id, 'home')))
                    return $this->output->set_content_type('jpeg')->set_output(file_get_contents($this->getImagesPath($id, $this->input->get('size'))));
                return $this->response(array($this->router->class => array('message' => 'no image')), 404);
                break;

            case 'custom':

                break;

            default:
                $path = $this->getImagesPath($id, NULL);
                if (file_exists($path)) {
                    $this->load->library('simpleimage');
                    $this->simpleimage->load($path);
                    if ($this->simpleimage->get_height() >= self::IMG_HEIGHT_LIMIT) {
                        $this->simpleimage->load($path)->fit_to_height(self::IMG_HEIGHT_LIMIT);
                        return $this->simpleimage->flip('x')->output();
                    }
                    $this->simpleimage->load($path)->fit_to_width(self::IMGSIZE);
                    return $this->simpleimage->flip('x')->output();

                }
                return $this->response(array($this->router->class => array('message' => 'no image')), 404);
                break;
        }
    }


    public function getImagesPath($id_image, $size = null)
    {
        $items = array();
        if (!is_array($id_image)) {
            $this->image_path = _PS_PROD_IMG_DIR_ . implode('/', str_split($id_image)) . '/';
            return $this->image_path . $id_image . (($size != NULL) ? '-' . $size . '_default.jpg' : $size . '.jpg');
        }
        foreach ($id_image as $key => $value) {
            $items[] = _PS_PROD_IMG_DIR_ . implode('/', str_split($value->id_image)) . '/' . $value->$id_image . (($size != NULL) ? '-' . $size . '_default.jpg' : $size . '.jpg');
        }
        return $items;

    }


}

?>