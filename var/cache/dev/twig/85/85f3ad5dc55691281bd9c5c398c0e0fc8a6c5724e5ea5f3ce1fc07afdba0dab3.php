<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d9f29688383028a2d8248f3214932493d33e33d87b4b29b582d77ebe0706d4d2 extends Twig_Template
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
        $__internal_70eff0fea3c6564d08bd7f6b3176050598433869326b673bd41ca6686bc0d12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70eff0fea3c6564d08bd7f6b3176050598433869326b673bd41ca6686bc0d12f->enter($__internal_70eff0fea3c6564d08bd7f6b3176050598433869326b673bd41ca6686bc0d12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_81e3be1613c9e93ae07e7fb9cd36f10388e3c5065b77459043cd57746a84b197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e3be1613c9e93ae07e7fb9cd36f10388e3c5065b77459043cd57746a84b197->enter($__internal_81e3be1613c9e93ae07e7fb9cd36f10388e3c5065b77459043cd57746a84b197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_70eff0fea3c6564d08bd7f6b3176050598433869326b673bd41ca6686bc0d12f->leave($__internal_70eff0fea3c6564d08bd7f6b3176050598433869326b673bd41ca6686bc0d12f_prof);

        
        $__internal_81e3be1613c9e93ae07e7fb9cd36f10388e3c5065b77459043cd57746a84b197->leave($__internal_81e3be1613c9e93ae07e7fb9cd36f10388e3c5065b77459043cd57746a84b197_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
