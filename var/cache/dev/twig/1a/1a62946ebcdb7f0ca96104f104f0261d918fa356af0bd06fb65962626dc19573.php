<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_083e7be40980f9bca47763dc842d3e81505bb5465aa82a9958e2a876fb10377b extends Twig_Template
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
        $__internal_f6e7385cf65775a3b65dc25ef7ba45d16a629ed3fae174da3be3e1866094f801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e7385cf65775a3b65dc25ef7ba45d16a629ed3fae174da3be3e1866094f801->enter($__internal_f6e7385cf65775a3b65dc25ef7ba45d16a629ed3fae174da3be3e1866094f801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b600248c371ccf97c7517c0f2fe9c711014e01bf53be3cbbc22b243e9ee71a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b600248c371ccf97c7517c0f2fe9c711014e01bf53be3cbbc22b243e9ee71a4c->enter($__internal_b600248c371ccf97c7517c0f2fe9c711014e01bf53be3cbbc22b243e9ee71a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f6e7385cf65775a3b65dc25ef7ba45d16a629ed3fae174da3be3e1866094f801->leave($__internal_f6e7385cf65775a3b65dc25ef7ba45d16a629ed3fae174da3be3e1866094f801_prof);

        
        $__internal_b600248c371ccf97c7517c0f2fe9c711014e01bf53be3cbbc22b243e9ee71a4c->leave($__internal_b600248c371ccf97c7517c0f2fe9c711014e01bf53be3cbbc22b243e9ee71a4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
