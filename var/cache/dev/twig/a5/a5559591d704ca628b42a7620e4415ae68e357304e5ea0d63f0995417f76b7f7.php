<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1a740dbc902e4f085fb093d80a3cc9d495bd4ec20d0dbda8a1c9ce7fcf4196c1 extends Twig_Template
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
        $__internal_b8902211a40a606d6c87f3be0d626612554b811b57648df9ac01855c4f58eb0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8902211a40a606d6c87f3be0d626612554b811b57648df9ac01855c4f58eb0a->enter($__internal_b8902211a40a606d6c87f3be0d626612554b811b57648df9ac01855c4f58eb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e4abf96092802b291143c6ae7797d888573d4930096c958a2df3898bfd63bab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4abf96092802b291143c6ae7797d888573d4930096c958a2df3898bfd63bab7->enter($__internal_e4abf96092802b291143c6ae7797d888573d4930096c958a2df3898bfd63bab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b8902211a40a606d6c87f3be0d626612554b811b57648df9ac01855c4f58eb0a->leave($__internal_b8902211a40a606d6c87f3be0d626612554b811b57648df9ac01855c4f58eb0a_prof);

        
        $__internal_e4abf96092802b291143c6ae7797d888573d4930096c958a2df3898bfd63bab7->leave($__internal_e4abf96092802b291143c6ae7797d888573d4930096c958a2df3898bfd63bab7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
