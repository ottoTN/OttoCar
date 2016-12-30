<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_171889784a53a90d67a2476f984df3c13478ac6dfe97daac05fa770be0b5be04 extends Twig_Template
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
        $__internal_48e7f709dd99ad2633d1fe48f0ee30b372904da8f60b0262a3439048130f61bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e7f709dd99ad2633d1fe48f0ee30b372904da8f60b0262a3439048130f61bd->enter($__internal_48e7f709dd99ad2633d1fe48f0ee30b372904da8f60b0262a3439048130f61bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_7ad8fc1f193301113c4b0b77aeca40e26926e31b683f93180c85220348c1a8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad8fc1f193301113c4b0b77aeca40e26926e31b683f93180c85220348c1a8db->enter($__internal_7ad8fc1f193301113c4b0b77aeca40e26926e31b683f93180c85220348c1a8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_48e7f709dd99ad2633d1fe48f0ee30b372904da8f60b0262a3439048130f61bd->leave($__internal_48e7f709dd99ad2633d1fe48f0ee30b372904da8f60b0262a3439048130f61bd_prof);

        
        $__internal_7ad8fc1f193301113c4b0b77aeca40e26926e31b683f93180c85220348c1a8db->leave($__internal_7ad8fc1f193301113c4b0b77aeca40e26926e31b683f93180c85220348c1a8db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
