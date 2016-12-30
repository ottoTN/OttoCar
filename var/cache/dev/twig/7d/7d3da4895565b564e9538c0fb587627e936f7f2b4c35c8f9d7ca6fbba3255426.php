<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_24737a43162a3ea5e871e836d04318aa1b3c43521594b2b2eafbf1aa5ef882ee extends Twig_Template
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
        $__internal_6d0764a187cc1aea26461e1cf56be5104a3f03ebd5193a52c24d0e88b167f214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0764a187cc1aea26461e1cf56be5104a3f03ebd5193a52c24d0e88b167f214->enter($__internal_6d0764a187cc1aea26461e1cf56be5104a3f03ebd5193a52c24d0e88b167f214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b6a2d72b43f3a720e27bfb91306f1adc81c82e6ee82d6e30162ef52de68777dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a2d72b43f3a720e27bfb91306f1adc81c82e6ee82d6e30162ef52de68777dd->enter($__internal_b6a2d72b43f3a720e27bfb91306f1adc81c82e6ee82d6e30162ef52de68777dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6d0764a187cc1aea26461e1cf56be5104a3f03ebd5193a52c24d0e88b167f214->leave($__internal_6d0764a187cc1aea26461e1cf56be5104a3f03ebd5193a52c24d0e88b167f214_prof);

        
        $__internal_b6a2d72b43f3a720e27bfb91306f1adc81c82e6ee82d6e30162ef52de68777dd->leave($__internal_b6a2d72b43f3a720e27bfb91306f1adc81c82e6ee82d6e30162ef52de68777dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
