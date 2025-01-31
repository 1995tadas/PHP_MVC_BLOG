<?php
namespace  App\Helper;

class FormHelper
{
    private $form;

    public function __construct($action, $method, $class = '',$param='')
    {
        $this->form = '<form class="' . $class . '" action="' . $action . '" method="' . $method .'" '.$param.'>';
    }

    public function addInput($attributes, $label = '', $wrapper = '')
    {
        $form = '';

        $form .= '<input ';

        foreach ($attributes as $key => $element) {
            $form .= ' ' . $key . '="' . $element . '"';
        }


        $form .= ' >';

        if($label != ''){
            if(isset($attributes['id'])){
                $for = 'for="'.$attributes['id'].'"';
            } else {
                $for= "";
            }

        $form .= '<label '.$for.'>'.$label.'</label>';
        }
        if ($wrapper != '') {
            $form = $this->wrapElement($wrapper,$form);
        }
        $this->form .= $form;
        return $this;
    }
    public function addSelect($options, $name, $wrapper = '', $label = '')
    {
        $form = '';
        $form .= '<select name="' . $name . '">';
        foreach ($options as $value => $option) {
            $form .= '<option value="' . $value . '"';
            $form .= ' >';
            $form .= ucfirst($option);
            $form .= '</option>';
        }
        $form .= '</select>';
        if ($wrapper != '') {
            $html = '<div class="' . $wrapper . '">' . $form . '</div>';
        }
        $this->form .= $form;
        return $this;
    }


    public function addTextarea($attributes,$value,$label="", $wrapper="")
    {
        $form = '';

        if($label != ''){
            if(isset($attributes['id'])){
                $for = 'for="'.$attributes['id'].'"';
            } else {
                $for= "";
            }

            $form .= '<label '.$for.'>'.$label.'</label>';
        }

        $form .= '<textarea ';

        foreach ($attributes as $key => $element) {
            $form .= ' ' . $key . '="' . $element . '"';
        }
        $form .= ' >';
        $form .= $value;
        $form .='</textarea>';

        if ($wrapper != '') {
         $form = $this->wrapElement($wrapper,$form);
        }

        $this->form .= $form;
        return $this;
    }

    public function close($tag)
    {
        $this->form .= '</' . "$tag" . '>';
        return $this;
    }

    public function open($tag, $class = null)
    {
        $this->form .= '<' . "$tag" . " class=$class" . '>';
        return $this;
    }

    public function tag($tag, $text, $class = null)
    {

        $this->form .= '<' . "$tag" . ' ' . "class=$class" . '>' . "$text" . '</' . "$tag" . '>';
        return $this;
    }

    public function wrapElement($wrapper, $form){
        $form = '<div class="' . $wrapper . '">' . $form . '</div>';
        return $form;
    }

    public function get()
    {
        $this->form .= '</form>';
        return $this->form;
    }
}
