<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_48e82fbc83491aaa29a5c2e7af779210f691807df5ddce54b0b540838414242d extends Twig_Template
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
        $__internal_78ea72e3a76aa0987ebe1fb89b8d3ff444a1f9ba2e3b69d79615c833b6e9ffad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ea72e3a76aa0987ebe1fb89b8d3ff444a1f9ba2e3b69d79615c833b6e9ffad->enter($__internal_78ea72e3a76aa0987ebe1fb89b8d3ff444a1f9ba2e3b69d79615c833b6e9ffad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_1a408192844946c8d1909884bab6bb8476ab337a1f75f4b6308133d030b38790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a408192844946c8d1909884bab6bb8476ab337a1f75f4b6308133d030b38790->enter($__internal_1a408192844946c8d1909884bab6bb8476ab337a1f75f4b6308133d030b38790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_78ea72e3a76aa0987ebe1fb89b8d3ff444a1f9ba2e3b69d79615c833b6e9ffad->leave($__internal_78ea72e3a76aa0987ebe1fb89b8d3ff444a1f9ba2e3b69d79615c833b6e9ffad_prof);

        
        $__internal_1a408192844946c8d1909884bab6bb8476ab337a1f75f4b6308133d030b38790->leave($__internal_1a408192844946c8d1909884bab6bb8476ab337a1f75f4b6308133d030b38790_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
