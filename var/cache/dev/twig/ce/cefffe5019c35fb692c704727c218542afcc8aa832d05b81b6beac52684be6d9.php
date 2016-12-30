<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0dc3a66d58c4950f36b1c641d87873b9e8f6acfd534a6d8e0170bf4c0e89d672 extends Twig_Template
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
        $__internal_6cb814d389199853988a5efa13757206d3aa1b5ae9fc37b9a2c2511c0981f0e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb814d389199853988a5efa13757206d3aa1b5ae9fc37b9a2c2511c0981f0e8->enter($__internal_6cb814d389199853988a5efa13757206d3aa1b5ae9fc37b9a2c2511c0981f0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9221711aab74b4d0e371b3b82c88634b19c6898ba505ea66a9f8308e46b2871b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9221711aab74b4d0e371b3b82c88634b19c6898ba505ea66a9f8308e46b2871b->enter($__internal_9221711aab74b4d0e371b3b82c88634b19c6898ba505ea66a9f8308e46b2871b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6cb814d389199853988a5efa13757206d3aa1b5ae9fc37b9a2c2511c0981f0e8->leave($__internal_6cb814d389199853988a5efa13757206d3aa1b5ae9fc37b9a2c2511c0981f0e8_prof);

        
        $__internal_9221711aab74b4d0e371b3b82c88634b19c6898ba505ea66a9f8308e46b2871b->leave($__internal_9221711aab74b4d0e371b3b82c88634b19c6898ba505ea66a9f8308e46b2871b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
