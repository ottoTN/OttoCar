<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_5f9f013309352d7d51cfebc08807eb29136a2b9e023003595e6582b29c03e725 extends Twig_Template
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
        $__internal_b52b3c11a595573fcfcfa362ed50910150c3289fc77cf56e05f3ea5ef9307a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52b3c11a595573fcfcfa362ed50910150c3289fc77cf56e05f3ea5ef9307a8f->enter($__internal_b52b3c11a595573fcfcfa362ed50910150c3289fc77cf56e05f3ea5ef9307a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_513d47904b68e95ed75933b7bc517bbd81763cfb6bb22ab3669829b497bb1e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513d47904b68e95ed75933b7bc517bbd81763cfb6bb22ab3669829b497bb1e31->enter($__internal_513d47904b68e95ed75933b7bc517bbd81763cfb6bb22ab3669829b497bb1e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b52b3c11a595573fcfcfa362ed50910150c3289fc77cf56e05f3ea5ef9307a8f->leave($__internal_b52b3c11a595573fcfcfa362ed50910150c3289fc77cf56e05f3ea5ef9307a8f_prof);

        
        $__internal_513d47904b68e95ed75933b7bc517bbd81763cfb6bb22ab3669829b497bb1e31->leave($__internal_513d47904b68e95ed75933b7bc517bbd81763cfb6bb22ab3669829b497bb1e31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
