<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3c0c31c7e61f3c4e1a5b8549778a12eeba116d4f704c0d331387041fb7e9d551 extends Twig_Template
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
        $__internal_6afef3b40a9db19e5beb6ef5a88f3b5912dfac898c2574111e0dea3e10a0558c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6afef3b40a9db19e5beb6ef5a88f3b5912dfac898c2574111e0dea3e10a0558c->enter($__internal_6afef3b40a9db19e5beb6ef5a88f3b5912dfac898c2574111e0dea3e10a0558c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_be1e508f4a2620bf70ede6eacfa60d54f4c778bac17412bf480bad4f55b1e2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1e508f4a2620bf70ede6eacfa60d54f4c778bac17412bf480bad4f55b1e2dc->enter($__internal_be1e508f4a2620bf70ede6eacfa60d54f4c778bac17412bf480bad4f55b1e2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6afef3b40a9db19e5beb6ef5a88f3b5912dfac898c2574111e0dea3e10a0558c->leave($__internal_6afef3b40a9db19e5beb6ef5a88f3b5912dfac898c2574111e0dea3e10a0558c_prof);

        
        $__internal_be1e508f4a2620bf70ede6eacfa60d54f4c778bac17412bf480bad4f55b1e2dc->leave($__internal_be1e508f4a2620bf70ede6eacfa60d54f4c778bac17412bf480bad4f55b1e2dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
