<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8b8810b585f2bd2f6ee563c96f9d65e822c7f3958e618806a0f43b2ff7d76243 extends Twig_Template
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
        $__internal_bb0be54de571b632228ba7c1c756faf94d156ef85b6c0b752a6b6295abf1487b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb0be54de571b632228ba7c1c756faf94d156ef85b6c0b752a6b6295abf1487b->enter($__internal_bb0be54de571b632228ba7c1c756faf94d156ef85b6c0b752a6b6295abf1487b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_59192217468d2a6d89243bb930de1d8adfbc45c2bb5b19e960ef3a05e4dd4adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59192217468d2a6d89243bb930de1d8adfbc45c2bb5b19e960ef3a05e4dd4adb->enter($__internal_59192217468d2a6d89243bb930de1d8adfbc45c2bb5b19e960ef3a05e4dd4adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bb0be54de571b632228ba7c1c756faf94d156ef85b6c0b752a6b6295abf1487b->leave($__internal_bb0be54de571b632228ba7c1c756faf94d156ef85b6c0b752a6b6295abf1487b_prof);

        
        $__internal_59192217468d2a6d89243bb930de1d8adfbc45c2bb5b19e960ef3a05e4dd4adb->leave($__internal_59192217468d2a6d89243bb930de1d8adfbc45c2bb5b19e960ef3a05e4dd4adb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
