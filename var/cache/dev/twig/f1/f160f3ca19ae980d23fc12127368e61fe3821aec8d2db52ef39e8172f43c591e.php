<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a95a0bee277dd0d3b789f3a77ab52e0a09ed5d7988c3729e4c3bb14a22ca134f extends Twig_Template
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
        $__internal_3964e78988a5110f2e3c8ecf24ebadd875b7d03befce50cbf32bba8a6532e151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3964e78988a5110f2e3c8ecf24ebadd875b7d03befce50cbf32bba8a6532e151->enter($__internal_3964e78988a5110f2e3c8ecf24ebadd875b7d03befce50cbf32bba8a6532e151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1a1159c0c8f3a28bdb838dda02462f76a55cf29cf1607c38845830111212f641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1159c0c8f3a28bdb838dda02462f76a55cf29cf1607c38845830111212f641->enter($__internal_1a1159c0c8f3a28bdb838dda02462f76a55cf29cf1607c38845830111212f641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3964e78988a5110f2e3c8ecf24ebadd875b7d03befce50cbf32bba8a6532e151->leave($__internal_3964e78988a5110f2e3c8ecf24ebadd875b7d03befce50cbf32bba8a6532e151_prof);

        
        $__internal_1a1159c0c8f3a28bdb838dda02462f76a55cf29cf1607c38845830111212f641->leave($__internal_1a1159c0c8f3a28bdb838dda02462f76a55cf29cf1607c38845830111212f641_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
