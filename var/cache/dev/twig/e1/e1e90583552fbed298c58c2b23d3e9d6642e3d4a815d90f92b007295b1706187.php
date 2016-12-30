<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6d5af044e659ebe145a4ba7595632b4b56391e6469694512c0730f232600d030 extends Twig_Template
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
        $__internal_54d669615993b48ac1f560ddae8ce0a463201f6894a3ee59c6fb401b75d0ae95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d669615993b48ac1f560ddae8ce0a463201f6894a3ee59c6fb401b75d0ae95->enter($__internal_54d669615993b48ac1f560ddae8ce0a463201f6894a3ee59c6fb401b75d0ae95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f92b62eb6c81a9c91a4d384973383f358eb68bccbfbac35302d3c388f055f166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92b62eb6c81a9c91a4d384973383f358eb68bccbfbac35302d3c388f055f166->enter($__internal_f92b62eb6c81a9c91a4d384973383f358eb68bccbfbac35302d3c388f055f166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_54d669615993b48ac1f560ddae8ce0a463201f6894a3ee59c6fb401b75d0ae95->leave($__internal_54d669615993b48ac1f560ddae8ce0a463201f6894a3ee59c6fb401b75d0ae95_prof);

        
        $__internal_f92b62eb6c81a9c91a4d384973383f358eb68bccbfbac35302d3c388f055f166->leave($__internal_f92b62eb6c81a9c91a4d384973383f358eb68bccbfbac35302d3c388f055f166_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
