<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0ce11ca6c4ead9f5b8f79e681df804f8266c54f1d21eefc277132b86dbf966f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2fa0c46725a83531eda23bc437fca12a9752cff2d75f356072fd0dc346741bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2fa0c46725a83531eda23bc437fca12a9752cff2d75f356072fd0dc346741bf->enter($__internal_c2fa0c46725a83531eda23bc437fca12a9752cff2d75f356072fd0dc346741bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_138a3bce9c3f6d1f86108d25a886dc7832c394e1e231f07e13c77c7c71e48924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138a3bce9c3f6d1f86108d25a886dc7832c394e1e231f07e13c77c7c71e48924->enter($__internal_138a3bce9c3f6d1f86108d25a886dc7832c394e1e231f07e13c77c7c71e48924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c2fa0c46725a83531eda23bc437fca12a9752cff2d75f356072fd0dc346741bf->leave($__internal_c2fa0c46725a83531eda23bc437fca12a9752cff2d75f356072fd0dc346741bf_prof);

        
        $__internal_138a3bce9c3f6d1f86108d25a886dc7832c394e1e231f07e13c77c7c71e48924->leave($__internal_138a3bce9c3f6d1f86108d25a886dc7832c394e1e231f07e13c77c7c71e48924_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
