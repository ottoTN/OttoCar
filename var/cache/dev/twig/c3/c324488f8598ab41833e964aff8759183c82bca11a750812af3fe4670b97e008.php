<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_047fcb50cd2c927f6f939d9138cff7ea2c0cd6440514d358fce764720a3743e7 extends Twig_Template
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
        $__internal_d76df1e8a826a897104ec9d0d84769d2fb2182ad0783b18eefc2a275ddda3cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76df1e8a826a897104ec9d0d84769d2fb2182ad0783b18eefc2a275ddda3cbd->enter($__internal_d76df1e8a826a897104ec9d0d84769d2fb2182ad0783b18eefc2a275ddda3cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c86a893747f56f88bd71c8e0920461c6982da985c2b8d524ea5ac99aef502682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86a893747f56f88bd71c8e0920461c6982da985c2b8d524ea5ac99aef502682->enter($__internal_c86a893747f56f88bd71c8e0920461c6982da985c2b8d524ea5ac99aef502682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d76df1e8a826a897104ec9d0d84769d2fb2182ad0783b18eefc2a275ddda3cbd->leave($__internal_d76df1e8a826a897104ec9d0d84769d2fb2182ad0783b18eefc2a275ddda3cbd_prof);

        
        $__internal_c86a893747f56f88bd71c8e0920461c6982da985c2b8d524ea5ac99aef502682->leave($__internal_c86a893747f56f88bd71c8e0920461c6982da985c2b8d524ea5ac99aef502682_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
