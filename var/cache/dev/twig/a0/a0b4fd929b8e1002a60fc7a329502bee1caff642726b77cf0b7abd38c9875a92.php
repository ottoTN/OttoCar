<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_27c46b3e01d9fe333072560758959d27d336d9245e5d58bbd79f536f7ef1efe8 extends Twig_Template
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
        $__internal_c2876e3423f3e47e9b5a106f6300c743c201fefd731661fffacb8078588dc2ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2876e3423f3e47e9b5a106f6300c743c201fefd731661fffacb8078588dc2ff->enter($__internal_c2876e3423f3e47e9b5a106f6300c743c201fefd731661fffacb8078588dc2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_9fa52125b766161b70e9293d6b18de956ad5792db5a688d469d0d5673cdb8e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa52125b766161b70e9293d6b18de956ad5792db5a688d469d0d5673cdb8e56->enter($__internal_9fa52125b766161b70e9293d6b18de956ad5792db5a688d469d0d5673cdb8e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c2876e3423f3e47e9b5a106f6300c743c201fefd731661fffacb8078588dc2ff->leave($__internal_c2876e3423f3e47e9b5a106f6300c743c201fefd731661fffacb8078588dc2ff_prof);

        
        $__internal_9fa52125b766161b70e9293d6b18de956ad5792db5a688d469d0d5673cdb8e56->leave($__internal_9fa52125b766161b70e9293d6b18de956ad5792db5a688d469d0d5673cdb8e56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
