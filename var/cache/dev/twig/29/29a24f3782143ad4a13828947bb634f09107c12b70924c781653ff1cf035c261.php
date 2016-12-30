<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d0e09cddd672fba2addee447a97ccac29eb47da865383bb39e4e69fa5ae1a00e extends Twig_Template
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
        $__internal_2c14622a1990142a7e75d4a429e06e1160b331f94b86fab36bd7e09e2f07c924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c14622a1990142a7e75d4a429e06e1160b331f94b86fab36bd7e09e2f07c924->enter($__internal_2c14622a1990142a7e75d4a429e06e1160b331f94b86fab36bd7e09e2f07c924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_390c28c64e166c93f90258d32c4d4cbe919b40012fdab694fecc183dcfba5107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390c28c64e166c93f90258d32c4d4cbe919b40012fdab694fecc183dcfba5107->enter($__internal_390c28c64e166c93f90258d32c4d4cbe919b40012fdab694fecc183dcfba5107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2c14622a1990142a7e75d4a429e06e1160b331f94b86fab36bd7e09e2f07c924->leave($__internal_2c14622a1990142a7e75d4a429e06e1160b331f94b86fab36bd7e09e2f07c924_prof);

        
        $__internal_390c28c64e166c93f90258d32c4d4cbe919b40012fdab694fecc183dcfba5107->leave($__internal_390c28c64e166c93f90258d32c4d4cbe919b40012fdab694fecc183dcfba5107_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
