<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_22316695f5a39af93062a1032d58c57023c0de7bab8c85de98b6d792824a593a extends Twig_Template
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
        $__internal_2f35e952662d90cc5293008aaf782c2134147f88db407f5a0e987f51bdadad87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f35e952662d90cc5293008aaf782c2134147f88db407f5a0e987f51bdadad87->enter($__internal_2f35e952662d90cc5293008aaf782c2134147f88db407f5a0e987f51bdadad87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4e926b8a07c11af96fd34281ae5abfac1a5bdb7f82c2a7325d6f3f05a0e04ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e926b8a07c11af96fd34281ae5abfac1a5bdb7f82c2a7325d6f3f05a0e04ded->enter($__internal_4e926b8a07c11af96fd34281ae5abfac1a5bdb7f82c2a7325d6f3f05a0e04ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2f35e952662d90cc5293008aaf782c2134147f88db407f5a0e987f51bdadad87->leave($__internal_2f35e952662d90cc5293008aaf782c2134147f88db407f5a0e987f51bdadad87_prof);

        
        $__internal_4e926b8a07c11af96fd34281ae5abfac1a5bdb7f82c2a7325d6f3f05a0e04ded->leave($__internal_4e926b8a07c11af96fd34281ae5abfac1a5bdb7f82c2a7325d6f3f05a0e04ded_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
