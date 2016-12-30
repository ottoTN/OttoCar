<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_69343dae8f1fb98300ae6b54118147d8a69c358eaa95a11d2cfa14431779fbd8 extends Twig_Template
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
        $__internal_9d0fa86729ff7d26f4b92c52d28d24fbd9031dc3acec4889c81b014862ddeb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0fa86729ff7d26f4b92c52d28d24fbd9031dc3acec4889c81b014862ddeb43->enter($__internal_9d0fa86729ff7d26f4b92c52d28d24fbd9031dc3acec4889c81b014862ddeb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6c1b803b6d7094cfbf81464219ff7d33a73153c6a6aa0efb605dee7d57932853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1b803b6d7094cfbf81464219ff7d33a73153c6a6aa0efb605dee7d57932853->enter($__internal_6c1b803b6d7094cfbf81464219ff7d33a73153c6a6aa0efb605dee7d57932853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9d0fa86729ff7d26f4b92c52d28d24fbd9031dc3acec4889c81b014862ddeb43->leave($__internal_9d0fa86729ff7d26f4b92c52d28d24fbd9031dc3acec4889c81b014862ddeb43_prof);

        
        $__internal_6c1b803b6d7094cfbf81464219ff7d33a73153c6a6aa0efb605dee7d57932853->leave($__internal_6c1b803b6d7094cfbf81464219ff7d33a73153c6a6aa0efb605dee7d57932853_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
