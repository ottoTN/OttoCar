<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_79744ffa3f4dac93b8733d47999c664b80d548724fd67ebb695ff018db46fed6 extends Twig_Template
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
        $__internal_dcb9b2363fc4f5b63ceb6a9efdf1a66985ea4da2a9605796c1309bf31ede0606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb9b2363fc4f5b63ceb6a9efdf1a66985ea4da2a9605796c1309bf31ede0606->enter($__internal_dcb9b2363fc4f5b63ceb6a9efdf1a66985ea4da2a9605796c1309bf31ede0606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_967061fd8e8f93ad73e189a7ef71b47e8c1d875a44029bbdb4402e73eab22634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967061fd8e8f93ad73e189a7ef71b47e8c1d875a44029bbdb4402e73eab22634->enter($__internal_967061fd8e8f93ad73e189a7ef71b47e8c1d875a44029bbdb4402e73eab22634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dcb9b2363fc4f5b63ceb6a9efdf1a66985ea4da2a9605796c1309bf31ede0606->leave($__internal_dcb9b2363fc4f5b63ceb6a9efdf1a66985ea4da2a9605796c1309bf31ede0606_prof);

        
        $__internal_967061fd8e8f93ad73e189a7ef71b47e8c1d875a44029bbdb4402e73eab22634->leave($__internal_967061fd8e8f93ad73e189a7ef71b47e8c1d875a44029bbdb4402e73eab22634_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
