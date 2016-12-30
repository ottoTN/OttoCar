<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7c901a94396e3804a903d46761c749ed67fac21da9d25a3aa00de17f65cb57eb extends Twig_Template
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
        $__internal_84d9937df9b72a840dee983216e503725baa46cfef06ae88dbabdac9d635da49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d9937df9b72a840dee983216e503725baa46cfef06ae88dbabdac9d635da49->enter($__internal_84d9937df9b72a840dee983216e503725baa46cfef06ae88dbabdac9d635da49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_656cdf2577017ace47fc8de2e47d1559714fe5deacbcd300d447898c0c3be649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656cdf2577017ace47fc8de2e47d1559714fe5deacbcd300d447898c0c3be649->enter($__internal_656cdf2577017ace47fc8de2e47d1559714fe5deacbcd300d447898c0c3be649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_84d9937df9b72a840dee983216e503725baa46cfef06ae88dbabdac9d635da49->leave($__internal_84d9937df9b72a840dee983216e503725baa46cfef06ae88dbabdac9d635da49_prof);

        
        $__internal_656cdf2577017ace47fc8de2e47d1559714fe5deacbcd300d447898c0c3be649->leave($__internal_656cdf2577017ace47fc8de2e47d1559714fe5deacbcd300d447898c0c3be649_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
